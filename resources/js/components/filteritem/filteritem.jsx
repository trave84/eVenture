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

  render() {
    return (
      <div className="filter-list-items">
        <input type="checkbox" 
        
        onChange={this.changed}  
        id={this.props.id} />     
        {/* CallBack:  (attrs = props) */}
        
       
        <label htmlFor={this.props.name}>{this.props.name}</label>
      </div>
    );
  }
}