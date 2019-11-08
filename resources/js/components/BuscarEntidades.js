import React, { Component } from 'react'

class BuscarEntidades extends Component {
    render() {
        return (
            <div> 
                <div className="form-group">
                    <input  type="search"
                            className="form-control form-control-md" 
                            name="buscar" 
                            id="buscar"
                            value={this.props.text} 
                            placeholder="Buscar" />
                </div>
            </div>
        )
    }
}

export default BuscarEntidades