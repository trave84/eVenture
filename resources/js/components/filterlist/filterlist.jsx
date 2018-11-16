import React from 'react';
import './filterlist.css';
import {Button} from 'react-bootstrap';
import Navbar from '../partials/navbar.jsx'; 
import FilterItem from '../filteritem/filteritem.jsx'; 
import ResultsListing from '../resultslisting/resultslisting.jsx';
import BadgeListing from '../badgelisting/badgelisting';

import { Slider } from 'rc-slider';
import 'rc-slider/assets/index.css'

export default class FilterList extends React.Component {
  constructor(props) {
    super(props);

    this.resultsListingsRef = React.createRef();    // Calling on createREf() and ASSIGN TO VAR
    this.itemChanged = this.itemChanged.bind(this);

    this.state = {
      items: null,
      selectedTags: {},
      results: [],
    };
  }

  // consoleThings(e){
  //   e.preventDefault();
  //   console.log(this.refs);
  // }

  // Lifecycle hook #1
  componentDidMount(){
    fetch('http://www.eventure.test/api/tags')
    .then(resp => resp.json())
    .then(json => {
      this.setState({
        items: json
      })
      console.log(json)
    });
  }

  // Callback: to create a 
  itemChanged(checked, category, tag) {
    console.log(checked, category, tag);

    let selectedTags = this.state.selectedTags;

    if(checked) {
      if(!selectedTags[category]){
        selectedTags[category] = [];
      }
      selectedTags[category].push(tag);
      // this.resultsListingRef.current.changeValue(1);
    } else {
      selectedTags[category] = selectedTags[category].filter(e => e !== tag);
      if(selectedTags[category].length === 0){
        delete selectedTags[category]
      }
      // this.resultsListingRef.current.changeValue(-1);
    }

    console.log(selectedTags);
    this.setState({
      selectedTags: selectedTags
    });

    this.postFilterCriteria();
  }

  postFilterCriteria(){
    const self = this;

    axios.post('/api/search_request', {
      selectedTags: this.state.selectedTags
    }).then(function (response) {
      // handle success
      self.setState({
        results:response.data
      });
    });
  }


  // Whatever is in the State will be rendered here / State should be ready before
  render() {
    return (
      <div className="main">
        <div className="row">
          <div className="results-container col-md-3">
          <h1>Filter</h1>
          
          <button type="submit" className="btn btn-danger btn-sm">RESET ALL</button>
          <button type="submit"   className="btn btn-success btn-sm">CLOSE</button>

          <Slider /> 
          {/* <Range /> */}
          <div  className="filter-list"> 
            { this.state.items == null ? null : 
              ( 
                this.state.items.map((
                  category, index) => 
                  <div key={index} className="category-divs">
                    <Button key={index} className="btn btn-primary category-btns" onClick={() => this.setState({ open: !this.state.open })}>{category.name}</Button>
                          
                          {
                            category.tags.map((tag, index) => 
                            
                            <FilterItem 
                            key={index}
                            changed={this.itemChanged}
                            id={tag.id}
                            name={tag.name} 
                            category={category}/>
                          )
                        }
                  </div>
                )
              )
            }
          </div>
      </div>
      <div className="tags-badges col-md-9">
        <BadgeListing selectedTagsTags={this.state.selectedTags}/>
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


