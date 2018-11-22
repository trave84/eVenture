import React from 'react';
// import {Button} from 'react-bootstrap';
import './filterlist.css';
// import Navbar from '../partials/navbar/navbar.jsx'; 
// import FilterCloseBtn from '../filterclosebtn/filterclosebtn.jsx'; 
// import FilterResetBtn from '../filterresetbtn/filterresetbtn.jsx'; 
// TODO#1 import SliderItem from '../slideritem/slideritem.jsx'; 
import FilterItem from '../filteritem/filteritem.jsx'; 
import ResultsListing from '../resultslisting/resultslisting.jsx';
import BadgeListing from '../badgelisting/badgelisting';
import VenuesList from '../venueslist/venueslist';

export default class FilterList extends React.Component {
  constructor(props) {
    super(props);

    this.resultsListingRef = React.createRef();    // Calling on createREf() and ASSIGN TO VAR
    this.itemChanged = this.itemChanged.bind(this);
    
    // this.selectedTags = this.selectedTags.bind(this);

    // TODO#2 this.sliderChanged = this.sliderChanged.bind(this);

    let selectedTags = {};
    let hash = window.location.hash.substr(1);
    console.log('hash: ' +  hash);
    if(hash){
      selectedTags = JSON.parse(decodeURIComponent(hash));
    }
    console.log('selectedTags: ', selectedTags);

    this.state = {
      // TODO#3 moodValue: 5,     //default state: sliders
      // TODO#3 energyValue: 5,

      items: null,      // default state: number of checkboxes
      selectedTags: selectedTags, //selected checkboxes
      // checkedTags: selectedTags  ;
      results: [],      //to save: JSON response from axios
      opened: [],
      // sidebarShown: [],
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
      console.log('fetch(api/tags)', json);
    });

    // const tags = localStorage.getItem('savedLocalTags');
    // if (tags !== null) {
    //   console.log(JSON.parse(tags));
    //   //this.setState({selectedTags: JSON.parse(tags)},
      // go through the object nd check checkboxes
      // );
    // }
    this.postFilterCriteria();    //IS ASYNC NOW 

  }
  
  // hideSidebar(sidebar){
  //   let sidebarShown = this.state.sidebarShown;
    
  //   if (sidebarShown){

  //   }else{

  //   }
  // }

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

  // oldSelected(){
  //   selectedTags = this.state.selectedTags; 
  //   // for (let i in this.selectedTags){}
  //   for(let i = 0; i < this.selectedTags.length; i++) {
  //     for(let j = 0;    )
  //     // console.log();
  //     this.selectedTags[i][];
  //   }
  // }

  // Callback Function: method to <Checkbox Attributes />  (with parameters)
  itemChanged(checked, category, tag) {
    console.log('<FilterItem changed={this.itemChanged} /> ->itemChanged(checked, category, tag.id): ', checked, category, tag);

    let selectedTags = this.state.selectedTags;   //inScope: selectedTags{}
    // Assign selectedTags[][] now:
    if(checked) {
      if(!selectedTags[category]){
        selectedTags[category] = [];
      }
      selectedTags[category].push(tag);
      // this.resultsListingRef.current.changeValue(1);
    // FOR: deselect checkboxe
    } else {
      selectedTags[category] = selectedTags[category].filter(e => e !== tag);
      if(selectedTags[category].length === 0){
        delete selectedTags[category]
      }
      // this.resultsListingRef.current.changeValue(-1);
    }
   //  
   let hash =  encodeURIComponent(JSON.stringify(selectedTags))
   location.replace('#'+hash)

    console.log(selectedTags);
    this.setState({
      selectedTags: selectedTags    //
    });  // TOWAIT: for setting new state AND THEN call postFilter ADD this.postFilterCriteria() here as Second parameter

   this.postFilterCriteria();    //IS ASYNC NOW 
  }


  postFilterCriteria(){
    localStorage.setItem('savedLocalTags', JSON.stringify(this.state.selectedTags));

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
      console.log('results[]: ', self.state.results);
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
          {/* <VenuesList /> */}
          <div className="filterlist-container col-md-4">
          <h4>Your Filter Criteria</h4>
          
          {/* TODO#1 */}
          {/* <FilterResetButton type="submit" hanldeClick={this.handleclick} className="btn btn-danger btn-sm">RESET ALL</FilterResetButton> */}
          
          {/* <FilterCloseBtn type="submit" onClick={this.hanldeClick}   className="btn btn-success btn-sm">CLOSE</FilterCloseBtn> */}

          {/* <SliderItem />  */}
          {/* <Range /> */}

          <div className="filter-list"> 
            { this.state.items == null ? null : 
              ( 
                this.state.items.map((category, index) => 
                  <div key={index} className="category-listing-div">
                    
                    <button type="button"  className="btn btn-primary my-1 btn-block category-btns" onClick={() => {
                      this.openClicked(category);}}>{category.name} <span className="badge badge-light"><i className="fas fa-caret-right"></i></span></button>

                    {
                      this.state.opened.includes(category.id) ? (
                          <div className="category-divs">
                            {
                              category.tags.map((tag, index) => 
                              
                              <FilterItem 
                              key={index}
                              
                              oldSelected={this.oldSelected}
                              changed={this.itemChanged}  //CallBack:(attributes = props)
                             
                              // HTML ATTRIBUTES:
                              id={tag.id}
                              className="tag-checkboxes"
                              name={tag.name}
                              category={category}/>
                            )
                          }
                        </div>
                      ) : null
                    }
                      
                  </div>  //END: .category-divs
                )
              )
            }
          </div>
      </div>

      {/* <div className="tags-badges col-md-9"> */}
            {/* Selected Tags: */}
        {/* <BadgeListing selectedTagsTags={this.state.selectedTags}/> */}
      {/* </div> */}

      <div className="resultslisting-container col-md-8">
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

