import React from 'react'


class ButtonConsulta extends React.Component {
    constructor(props){
        super(props)
        this.clickAlert = this.clickAlert.bind(this)
    }
    clickAlert (e){
        alert(e.target.value);
    }
    render(){
        return (
            <div>
                <div className="form-group">
                    <button type="button" onClick={this.clickAlert} className="btn btn-success btn-md" id="pesquisar">Pesquisar</button>
                </div>
            </div>
        )
    }
}

export default ButtonConsulta