import React, {Component} from "react";
import Axios from "axios";
import MovieList from "../views/MovieList.js";

export default class View extends Component {

    constructor(props)
    {
        super(props);
        // keep our list of users available in our state variable named users
        this.state = {movie:[]};
    }

 

    componentDidMount()
    {
        // when the component loads, grab our users from our server side
        Axios.get(
            "http://localhost/movieview.php"
        )
        .then(response => {
            // if we have data, we can dump into the console log while debugging
            console.log(response.data);

            this.setState({movie: response.data});
            
            
        })
        .catch(function (error) {
            console.log(error)
        });
    }
   
    
    render() {
        return (
            <div>
            <h3>Movie List</h3>
            <table className='table table-striped'>
                <thead>
                    <tr>
                    <td>{this.state.movie.map(function(object, index){
                     return(
                    <div>
                     <h1>{object.m_title}</h1>
                     <h1><img src={object.m_pic} class="movielist"/></h1>
                     </div>
                     ) })}
                
                
                </td>
                 

                    </tr>
                </thead>
            </table>
        </div>   
        )
    }
}