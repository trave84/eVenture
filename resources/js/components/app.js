import React, { Component } from 'react';
import ReactDOM from 'react-dom'
// import { BrowserRouter, Route, Switch } from 'react-router-dom'
// import Header from './Header'

// import VenuesList from './VenuesList'


class App extends Component {

  render() {
    return (
      <div>
        {/* <BrowserRouter> */}
              {/* <Header />
              <Switch>
                <Route exact path='/' component={VenuesList} />
              </Switch> */}
        {/* </BrowserRouter>    */}
      </div>
    );
  }
}
ReactDOM.render(<App />, document.getElementById('app'));


//  <div className="container">
//             <div className="row">
          
//           <div className="filters-container"  className="col-2 col-md-12">
//             <form onSubmit={this.handleSubmit} method="get">
//             <h1>Filter</h1>
              
//             {/* {{-- <div action="{{ action('TagController@postSearch')}}" method="post" class="form-group"> --}}       */}
//             <button type="submit" className="btn btn-danger btn-sm">RESET ALL</button>
//             <button type="submit" onSubmit="{{action('TagController@getResults')}}"  className="btn btn-success btn-sm">SEARCH</button>
//               @csrf
                  
//             <div  className="filter-list"> 
//               @foreach($categories as $category)
//                 <button className="btn btn-primary" type="button" data-toggle="collapse" data-target="#collapseExample" aria-expanded="false" aria-controls="collapseExample">{{ $category->name }}
//                 </button>
//               <div classNames="filter-list-items">
//                 <div className="collapse" id="collapseExample">
//                   <div className="card card-body">
//                     @foreach($category->tags as $tag)
//                       <input type="checkbox" onChange={this.handleChange} className="filter-checkboxes" name="{{ $tag->category->name }}" id="tag-{{ $tag->id }}" value="{{$tag->id}}" selected>{{ $tag->name }}
//                       {/* {{--  <br> --}} */}
//                     @endforeach
//                   </div>
//                 </div>
//               </div>
//               @endforeach
//             </div>
//           </form> 
//           {/* {{-- End of Form-Group --}} */}
//           </div>
//           <div id="filter-results" className="col-10 col-md-12">
//             <h1>Your Results</h1>
    
//           </div>  
//         </div>
//       </div>