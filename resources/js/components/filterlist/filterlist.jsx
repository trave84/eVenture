import React from 'react';
import {Button} from 'react-bootstrap';
import './filterlist.css';
// import Navbar from '../partials/navbar/navbar.jsx'; 
// import FilterCloseBtn from '../filterclosebtn/filterclosebtn.jsx'; 
// import FilterResetBtn from '../filterresetbtn/filterresetbtn.jsx'; 
// TODO#1 import SliderItem from '../slideritem/slideritem.jsx'; 
import FilterItem from '../filteritem/filteritem.jsx'; 
import ResultsListing from '../resultslisting/resultslisting.jsx';
import BadgeListing from '../badgelisting/badgelisting';

export default class FilterList extends React.Component {
  constructor(props) {
    super(props);

    this.resultsListingRef = React.createRef();    // Calling on createREf() and ASSIGN TO VAR
    this.itemChanged = this.itemChanged.bind(this);
    // TODO#2 this.sliderChanged = this.sliderChanged.bind(this);

    this.state = {
      // TODO#3 moodValue: 5,     //default state: sliders
      // TODO#3 energyValue: 5,

      items: null,      // default state: number of checkboxes
      selectedTags: {}, //selected checkboxes
      results: [],      //to save: JSON response from axios
      opened: []
    };
  }

  // Lifecycle hook #1
  componentDidMount(){
    fetch('http://www.eventure.test/api/tags')
    .then(resp => resp.json())
    .then(json => {
      this.setState({   // newState for: items[]
        items: json
      })
      console.log(json);
    });
  }

  openClicked(category){
    let opened = this.state.opened;

    if(opened.includes(category.id)){
      opened = opened.filter(elm => elm !== category.id);
    }else{
      opened.push(category.id);
    }

    this.setState({
      opened: opened
    });
  }

  // Callback Function: method to <Checkbox Attributes />  (with parameters)
  itemChanged(checked, category, tag) {
    console.log(checked, category, tag);

    let selectedTags = this.state.selectedTags;   //inScope: selectedTags{}

    // Assign selectedTags[][] now:
    if(checked) {
      if(!selectedTags[category]){
        selectedTags[category] = [];
      }
      selectedTags[category].push(tag);
      // this.resultsListingRef.current.changeValue(1);
    
    // FOR: deselect checkboxes
    } else {
      selectedTags[category] = selectedTags[category].filter(e => e !== tag);
      if(selectedTags[category].length === 0){
        delete selectedTags[category]
      }
      // this.resultsListingRef.current.changeValue(-1);
    }

    console.log(selectedTags);
    this.setState({
      selectedTags: selectedTags    //
    });  // TOWAIT: for setting new state AND THEN call postFilter ADD this.postFilterCriteria() here as Second parameter

   this.postFilterCriteria();    //IS ASYNC NOW 
  }


  postFilterCriteria(){
    const self = this;    //TO REFER: to FilterList below IN  Axios.then()

    axios.post('/api/search_request', {
      selectedTags: this.state.selectedTags
      
      // TODO#5
      // attributes: {
      //   mood: this.state.mood,
      //   energy: this.state.energy
      // }
    }).then(function (response) {
      // handle success
      self.setState({
        results:response.data
      });
    });
  }

  // componentWillUpdate(nextProps, nextState) {
  //   localStorage.setItem()
  // }
  
  // Whatever is in the State will be rendered here / State should be ready before
  render() {
    console.log(this.state.opened);
    return (
      <div className="main">
        <div className="row">
          <div className="filterlist-container col-md-3">
          <h4>Filter Criteria</h4>
          
          {/* TODO#1 */}
          {/* <FilterResetButton type="submit" hanldeClick={this.handleclick} className="btn btn-danger btn-sm">RESET ALL</FilterResetButton> */}
          
          {/* <FilterCloseBtn type="submit" onClick={this.hanldeClick}   className="btn btn-success btn-sm">CLOSE</FilterCloseBtn> */}

          {/* <SliderItem />  */}
          {/* <Range /> */}

          <div className="filter-list"> 
            { this.state.items == null ? null : 
              ( 
                this.state.items.map((category, index) => 
                  <div key={index} >
                    <button type="button"  className="btn btn-primary category-btns" onClick={() => {
                      this.openClicked(category);
                    }}>
                      {category.name}
                    </button>
                    {
                      this.state.opened.includes(category.id) ? (
                          <div className="category-divs">
                            {
                              category.tags.map((tag, index) => 
                              
                              <FilterItem 
                              key={index}

                              changed={this.itemChanged}  //CallBack:(attributes = props)
                              id={tag.id}
                              name={tag.name} 
                              category={category}/>
                            )
                          }
                        </div>
                      ) : null
                    }
                      
                  </div>
                )
              )
            }
          </div>
      </div>

      {/* <div className="tags-badges col-md-9">
        <BadgeListing selectedTagsTags={this.state.selectedTags}/>
      </div> */}
      <div className="resultslisting-container col-md-9">
        <ResultsListing results={this.state.results} />
      </div>
      </div>
    </div>
    );
  }
}



/* Version for children 

{ items.map(
    (item) => {
      return (
        <CheckItem 
          changed={this.itemChanged} 
          name={item.name} 
          text={item.text}/>
      )
    }
  )
}
*/


// TODO#4 
  // Slider ResetAll/ Slider Close:  Callback Functions()
  // resetBtnClicked(clicked, id){
  //   console.log(clicked, id);

  //   let resetBtnClicked = this.state.resetBtnClicked;
  //   if(clicked){
  //     selectedTags = {};
  //   } 
  //   for sliders below:
  //   this.setState({[event.target.name]:event.target.value});
  // }

