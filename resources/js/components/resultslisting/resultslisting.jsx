import React from 'react';
import './resultslisting.css';

export default class ResultsListing extends React.Component {
  constructor(props) {
    super(props);

    this.state = {
      value: 0
    }
  }
  
  changeValue(amount) {
    let newValue = this.state.value + amount;
    this.setState({
      value: newValue
    });
  }

  render() {
    return (
      <div className="results-listing">
        {this.state.value}
      </div>
    );
  }
}