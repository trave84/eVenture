import React from 'react';
import { render } from 'react-dom';
import './index.css';
// import from '.index.html';  was changed to views/app.blade.php
import Navbar from './components/partials/navbar/navbar.jsx'
import FilterList from './components/filterlist/filterlist.jsx'
import ResultsListing from './components/resultslisting/resultslisting.jsx'
import VenuesList from './components/venueslist/venueslist.jsx';

class App extends React.Component {
  render() {
    return (
      <div>
        {/* <Navbar /> */}
        <FilterList />
        <ResultsListing/>
        <VenuesList />
      </div>
    );
  }
}

render(<App />, document.querySelector('#app'));