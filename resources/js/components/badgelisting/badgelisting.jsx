import React from 'react';
import BadgeItem from '../badgeitem/badgeitem.jsx';

export default class BadgeListing extends React.Component {
  constructor(props) {
    super(props);

    this.state = {
      items: []
    };
  }
  
  render() {
    return (
      <div>
        <div className="tag-badges">
          <span>Your chosen filters:</span>
        </div>
        <div className="badges-list">
          {/* {this.props.results == null ? null : 
            this.props.results.map((badge, index) => 
            
              <BadgeItem key={index} 
              name={venue.name} 
              />
            )
          } */}
        </div>
      </div>
    );
  }
}