import React from 'react';
import './resultslisting.css';
// import '../venueitem/venueitem.jsx';
import VenueItem from '../venueitem/venueitem.jsx';

export default class ResultsListing extends React.Component {
  constructor(props) {
    super(props);

    this.state = {
      items: []
    };
  }
  
  // changeValue(amount) {
  //   let newNumber = this.state.value + amount;
  //   let newSelected  = this.state.selected;
  //   this.setState({
  //     numberOfSelected: newNumber;
  //     Selected: newSelected;

  //   });
  // }

  render() {
    return (

        <div>
          {this.props.results == null ? null : 
            this.props.results.map((venue, index) => 
            
              <VenueItem key={index} 
              name={venue.name} description={venue.description} address={venue.address}
              openingTime = {venue.opening_time} closingTime={venue.closing_time} banner = {venue.banner_img} link={venue.link} 
              />
            )
          }
        </div>
    );
  }
}