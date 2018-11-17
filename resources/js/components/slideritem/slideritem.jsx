import React from 'react';
 
export class Slider extends React.Component {
  constructor(props){
    super(props);

    this.changed =  this.changed.bind(this);
      
    }

  handleChange(e) {
    this.props.handleChange(e.target.value)

  }
    

  render() {
    return (
        <div className="slider-items">
          <input className="slider slider-xy"
          axis={this.axis}="xy"
          x={this.x}={this.state.x}
          xmax={100}
          y={this.state.y}
          ymax={100}

          onChange={this.handleChange} />
        </div>
      );
  };
}