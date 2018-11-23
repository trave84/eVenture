import React from 'react';
import './resultslisting.css';
import VenueItem from '../venueitem/venueitem.jsx';

export default class ResultsListing extends React.Component {
  constructor(props) {
    super(props);

    this.state = {
      items: []
    };
  }
  
  render() {
    return (
        <div className="row results-listing-filter">
            {this.props.results == null ? 
            // NEED TO DISPLAY SOMETHING HERE:
              ( 
                <div className="div-filter-alertbox">
                  <h3>Your search is too narrow. Try choosing more options</h3>
                </div>
              )
            : 
              (
                this.props.results.map((venue, index) => 
              
                <VenueItem key={index}
                id={venue.id} 
                name={venue.name} 
                
                description={venue.description} address={venue.address}
                openingTime={venue.opening_time} closingTime={venue.closing_time} 
                banner={venue.banner_img} link={venue.link} 
                tags={venue.tags}
                />
                )
              )
            }
        </div>
    );
  }
}