import React from 'react';
import './venueitem.css';

export default class VenueItem extends React.Component {
  constructor(props) {
    super(props);
  }
  
  trimStr(str, len) {
    return(str.slice(0, len) + "...");
  }
  // changed = (e) => {
  //   this.props.changed(e.target.checked);   // console.log(e)
  // }

  render() {
    return (
        //ID: should be good to call FROM venueslist.js <a href="#{}" 
      <div className="col-lg-6 div-card-filter" id={this.props.id}>
        <div className="card card-filter">
          <h3 className="card-title card-filter-title">{this.props.name}</h3>
          <div className="card-title card-filter-tagsdiv">
            <p className="card-title card-filter-tags-p"><i className="fas fa-map-marker-alt" /> {this.props.address}</p>
            <p className="card-title card-filter-tags-p"> Opens at: {this.props.openingTime}</p>
            <p className="card-title card-filter-tags-p">Closes at: {this.props.closingTime}</p>
          </div>
          <div className="card-filter-imgcontainer">
            <img className="card-img-top img-fluid card-filter-img" src={ this.props.banner } alt=" banner_img values will go here" />
          </div>
          <div className="card-title card-filter-tagsdiv">
            {/* more filter categories can be here */}
          </div>
        
          <div className="card-body card-filter-body">
          <p className="card-filter-text ellipsis card -filter-body">{this.props.description}</p> 
          <hr />

          {/* {{-- <a href="show/{{ $poll->id }}" className="card-link">Vote</a> --}} */}

          {/* {{-- REACT LINKS: WHEN SLUG IS DONE */}
          {/* <a href="{{ route('venues.single', $venue->slug) }}" className="btn btn-primary">Read More</a> */}
          <a href={"venues/show/" + this.props.id} className="btn btn-primary btn-block card-filter-btn-view">Check Features Out</a>
          <a href={this.props.link} target="_blank" className="btn btn-secondary btn-block card-filter-btn-websitelink">Open Website in New Tab </a>
        </div>
      </div>
    </div>

      /* <div class="venues">
      {/* INITIATE: props HERE TO BE USED IN VENUE LIST */
        /* <div class="venue-" >{this.props.text}</div>    
        <div class="quote-rating">{this.props.rating} </div> */
          
         /* ("changed" will create the Input DOM => (e))        */
        /* </div> */
    );
  }
}