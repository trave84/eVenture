import React, { Component } from 'react';

export default class App extends Component {
    render() {
        return (
            <div className="container">
                <div className="row justify-content-center">
                    <div className="col-md-8">
                        <div className="card">
                            <div className="card-header">App Component</div>

                            <div className="card-body">
                                I'm an app component!
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}
