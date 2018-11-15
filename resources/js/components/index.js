import React from 'react';
import { render } from 'react-dom';
import './index.css';
// import from '.index.html';  was changed to views/app.blade.php
import Navbar from './partials/navbar.jsx'
import FilterList from './filterlist/filterlist.jsx'
import ResultsListing from './resultslisting/resultslisting.jsx'

class App extends React.Component {
  render() {
    return (
      <div>
        index.js
        {/* <Navbar /> */}
        <FilterList />
        {/* <ResultsListing/> */}
      </div>
    );
  }
}

render(<App />, document.querySelector('#app'));