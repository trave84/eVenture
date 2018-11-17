// resources/assets/js/components/ProjectsList.js

import axios from 'axios'
import React, { Component } from 'react'
// import { Link } from 'react-router-dom'

export default class VenuesList extends Component {
  constructor () {
    super()
    this.state = {
      venues: []
    }
  }

  componentDidMount () {
    axios.get('/api/venues').then(response => {
      this.setState({
        venues: response.data
      })
    })
  }

  render () {
    const { venues } = this.state
    return (
      <div className='container py-4'>
        <div className='row justify-content-center'>
          <div className='col-md-8'>
            <div className='card'>
              <div className='card-header'>All Venues</div>
              <div className='card-body'>
                <a href="#" className='btn btn-primary btn-sm mb-3' to='/create'>
                  Add New Venue
                </a>
                <ul className='list-group list-group-flush'>
                  {venues.map(venue => (
                    <a href="#"
                      className='list-group-item list-group-item-action d-flex justify-content-between align-items-center'
                      to={`/${venue.id}`}
                      key={venue.id}
                    >
                      {venue.name}
                      <span className='badge badge-primary badge-pill'>
                        {venues.tags}
                      </span>
                    </a>
                  ))}
                </ul>
              </div>
            </div>
          </div>
        </div>
      </div>
    )
  }
}
