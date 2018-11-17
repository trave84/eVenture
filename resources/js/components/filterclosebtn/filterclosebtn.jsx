import React from 'react';

export default class FilterCloseBtn extends React.Component () {
  constructor(props){
    super(props);

    this.state = {
      isClicked: false
    };
  this.handleClick = this.handleClick.bind(this);
  }

  // handleClick(){
  //   this.props.changed(e.target.clicked, this.props.id)
  // }

  render(){
    return(
      <button className=" btn btn-primary filter-toggle-buttons" 
        onClick={this.handleClick}>RESET ALL
      </button>
      )
  }
}
