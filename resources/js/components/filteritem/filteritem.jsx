import React from 'react';

export default class FilterItem extends React.Component {
  constructor(props) {
    super(props);

    this.changed = this.changed.bind(this);
  }
  
  changed (e) {
    this.props.changed(e.target.checked, this.props.category.id, this.props.id);  
  }

  render() {
    return (
      <div className="filter-list-items">
        <input type="checkbox" id={this.props.id} 
        onChange={this.changed}/>     
        
        <label htmlFor={this.props.name}>{this.props.name}</label>
      </div>
    );
  }
}