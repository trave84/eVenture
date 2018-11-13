import React from 'react';
import { render } from 'react-dom';
import './index.css';
// index.html  was changed to views/app.blade.php

import FilterList from './filterlist/filterlist.jsx';

class App extends React.Component {
  render() {
    return (
      <div>
        <h1>Filter Your Results</h1>
        <FilterList />
      </div>
    );
  }
}

render(<App />, document.querySelector('#app'));