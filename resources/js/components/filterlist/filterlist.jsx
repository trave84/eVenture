import React from 'react';
import './filterlist.css';

import FilterItem from '../filteritem/filteritem.jsx'; //import: child component #1
import ResultsListing from '../resultslisting/resultslisting.jsx';       // import: child component #2`


export default class FilterList extends React.Component {
  
  constructor(props) {
    super(props);

    this.resultsListingsRef = React.createRef();    // Calling on createREf() and ASSIGN TO VAR
    this.itemChanged = this.itemChanged.bind(this);

    this.state = {
      items: null,
      selected: []
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
  itemChanged(checked, id) {
    let selected = this.state.selected;

    if(checked) {
      selected.push(id);
      // this.resultsListingRef.current.changeValue(1);
    } else {
      selected = selected.filter(e => e !== id);
      // this.resultsListingRef.current.changeValue(-1);
    }

    console.log(selected);
    this.setState({
      selected: selected
    });

    this.postFilterCriteria();
  }

  postFilterCriteria(){
    axios.post('/api/search_requests', {
      selected: this.state.selected
    });
  }

  // Whatever is in the State will be rendered here / State should be ready before
  render() {
    
    return (
      <div className="container">
        <div className="row">
          <div id="filter-container"  className="col-md-2">
          <h1>Filter</h1>
                
          <button type="submit" className="btn btn-danger btn-sm">RESET ALL</button>
          <button type="submit"   className="btn btn-success btn-sm">SEARCH</button>
              
          <div  className="filter-list"> 
          {/* MAP: all FilterItems (from JSON) + create VIRT.DOM +  assign 'changed' = e.target.checked*/}              
            { this.state.items == null ? null : 
              ( 
                this.state.items.map((
                  category, index) => 
                  <div>
                    <button className="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">{category.name}</button>
                    <div>
                      {
                        category.tags.map((tag, index) => 
                          <FilterItem 
                          changed={this.itemChanged}
                            
                          id={tag.id}
                          name={tag.name} 
                          category={tag.category}/>
                        )
                      }
                    </div>
                  </div>)           //END: map
              )
            }
          </div>
      </div>
            
      <ResultsListing ref={this.resultsListingRef} className="col-md-10"/>
      {/* Binding the Reference to the component  */}
      {/* doc.getElByID (add ID to the Counter Component) */}
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


