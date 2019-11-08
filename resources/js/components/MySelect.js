import React from 'react'

class MySelect extends React.Component {
    constructor(props){
        super(props)
        this.state = {
            entidades: []
        }
    }
    componentDidMount () {
        axios.get("/entendidades").then(resp => (
            this.setState({
                entidades : resp.data.content
            })
        ))
    }
    select(e){
        alert(e.target.value)
    }
    render(){
        return (
            <div>
                <div className="form-group">
                    <select name="entidade"  id="entidade" onChange={this.select} className="form-control form-control-md">
                        { this.state.entidades.map((item,index) => (
                            <option value={item.code} 
                                key={index}>{item.descricao}</option>
                        ))}
                    </select> 
                </div>
            </div>
        )
    }
}

export default MySelect