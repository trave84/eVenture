import React from 'react';
import { render } from 'react-dom';
import './index.css';
// import from '.index.html';  was changed to views/filter.blade.php
import Navbar from './partials/navbar/navbar.jsx'
import FilterList from './filterlist/filterlist.jsx'
import ResultsListing from './resultslisting/resultslisting.jsx'
import VenuesList from './venueslist/venueslist.jsx';

export default class Filter extends React.Component {
  render() {
    return (
      <div>
        {/* <Navbar /> */}
        <FilterList />
        {/* <ResultsListing/> */}
        <VenuesList />
      </div>
    );
  }
}

if (document.getElementById('filter-root')) {
  render(<Filter />, document.querySelector('#filter-root'));
}