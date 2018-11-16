import React from 'react';
 
export class InputSlider extends React.Component {
  constructor(props){
    super(props);

    this.props{
      
    }

    this.state = {
      x: 10,
      y: 10
    }
      this.props.handleChange = this.handleChange.bind(this);
  }
    
    handleChange(e) {
      this.props.handleChange(e.target.pos.x, e.target.pos.y)
    }
    

  render() {
    return (
        <div className="input-slider-items">
          <InputSlider className="slider slider-xy"
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