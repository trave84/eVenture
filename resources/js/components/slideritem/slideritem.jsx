import React from 'react';

export default class SliderItem extends React.Component {
  constructor(props) {
    super(props);

    this.changed = this.changed.bind(this);
  }
  
  changed (e) {
    this.props.changed(e.target.changed, this.props.id);  
  }

  render() {
    return (
      <div className="slider-list-items">
        <input id={this.props.id} 
        // (changed will create the Input DOM => (e))
        onChange={this.changed}/>     
        <label htmlFor={this.props.name}>{this.props.name}</label>
      </div>
    );
  }
}