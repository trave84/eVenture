import React from 'react';

export default class BadgeItem extends React.Component {
  constructor(props) {
    super(props);


    this.clicked = this.clicked.bind(this);
  }
  handleClick(){
    console.log('Tag has been clicked');
  }

  clicked (e) {
    this.props.clicked(e.target.checked, this.props.category.id, this.props.id);  
  }

  render() {
    return (
      <div className="badge-list-items">
        <button type="checkbox" id={this.props.id} 
        onClick={this.handleClick}/> 

        <label htmlFor={this.props.name}>{this.props.name}</label>
      </div>
    );
  }
}