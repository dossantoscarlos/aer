import React from 'react';
import ReactDOM from 'react-dom';
import axios from 'axios';
import MySelect from './MySelect';
import ButtonConsulta from './ButtonConsulta';
import BuscarEntidades from './BuscarEntidades';

export default class Consulta extends React.Component {
    constructor(props){
        super(props)
    }
    render() {  
        return (
            <div>
               <div className="card">
                    <div className="card-header">
                        <h4>Consulta</h4>
                    </div>
                    <div className="card-body">
                        <div className="row d-flex justify-content-center">
                            <div className="col-md-4">
                                <BuscarEntidades  />
                            </div>
                            <div className="col-md-2">
                                <MySelect />        
                            </div>
                            <div className="col-md-2">
                                <ButtonConsulta />
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        );
    }
}

if(document.getElementById('root'))
    ReactDOM.render(<Consulta/> , document.getElementById('root'))
