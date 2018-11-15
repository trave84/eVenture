import React from 'react';

export default class VenueItem extends React.Component {
  constructor(props) {
    super(props);
  }
  
  // changed = (e) => {
  //   this.props.changed(e.target.checked);   // console.log(e)
  // }

  render() {
    return (
        <div className="venues">
          <div className="card">
            <h3 className="card-title">{this.props.name}</h3>
          <div className="card-title card-tags">
            <p className="card-title "><i className="fas fa-map-marker-alt" /> {this.props.address}</p>
            <p className="card-title "> Opens at: {this.props.openingTime}</p>
            <p className="card-title ">Closes at: {this.props.closingTime}</p>
          </div>
          <img className="card-img-top" src="../images/sample_banner.jpg" alt=" banner_img values will go here" />
          <div className="card-title card-tags">
            <p className="card-title "><i className="fas fa-dollar-sign" /> Mid Range</p>
            <p className="card-title "> {this.props.link}</p>
            <p className="card-title "></p>    
          </div>
         
          <div className="card-body">
          <p className="card-text">{this.props.description}}</p> 
          <hr />

          {/* {{-- <a href="show/{{ $poll->id }}" className="card-link">Vote</a> --}} */}

           {/* {{-- REACT LINKS: WHEN SLUG IS DONE */}
          <a href="{{ route('venues.single', $venue->slug) }}" className="btn btn-primary">Read More</a>
          <a href="venues/show/{{ $venue->id }}" className="btn btn-primary">View</a>
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