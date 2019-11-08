import React, { Component } from 'react'
import axios from 'axios'

export default class TableEntidades extends Component {
    constructor(props){
        super(props)
    }

    render() {
        const { entidades } = this.props;
        return (
            <div>
            <table className="table">
                <thead>
                    { entidades.map((item, index) => {
                        {{ item }}   {{ index }}
                    }) }
                </thead>
            </table> 
            </div>
        )
    }
}
