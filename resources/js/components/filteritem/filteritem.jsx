import React from 'react';

export default class FilterItem extends React.Component {
  constructor(props) {
    super(props);

    // ES5 need to bind event handlers !!
    this.changed = this.changed.bind(this);
  }

  // e.target HOLDS all the event data
  changed (e) {
    this.props.changed(e.target.checked, this.props.category.id, this.props.id);  
  }

//  selected (e) {
//     this.props.selected(e.target.checked);
//  }
  // LOCALSTORAGE HERE??
  // updateChange(e){
  //   this.setState
  // }

  

  render() {
    return (
      <div className="filter-list-items">
        <input type="checkbox" 
        //selected={this.selected}
        onChange={this.changed}  
        id={this.props.id} />     
        {/* CallBack:  (attrs = props) */}
        
       
        <label htmlFor={this.props.id} className="label-filter-checkbox">{this.props.name}</label>
      </div>
    );  //CHANGEDTO: htmlFor={this.props.id} TO associate + allow users to click on Label to select
  }
}