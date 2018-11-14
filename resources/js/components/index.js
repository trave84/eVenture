import React from 'react';
import { render } from 'react-dom';
import './index.css';
// import from '.index.html';  was changed to views/app.blade.php

import FilterList from './filterlist/filterlist.jsx';

class App extends React.Component {
  render() {
    return (
      <div>
        <h1>I'm index.js</h1>
        <FilterList />
      </div>
    );
  }
}

render(<App />, document.querySelector('#app'));