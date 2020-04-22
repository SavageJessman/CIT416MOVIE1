import React, { Component } from "react";
import 'bootstrap/dist/css/bootstrap.min.css';
import GridContainer from "components/Grid/GridContainer.js";
import { Router, Route, Redirect } from "react-router-dom";
import MovieList from "components/MovieList/movielist.js";
import MovieInfo from "components/MovieInfo/MovieInfo.js";
import Comment from "components/Comment/comment.js";
import Rating from "components/Rating/rating.js";
import Register from 'components/Register.js';
import AdminNavbarLinks from "components/Navbars/AdminNavbarLinks";
import View from 'components/View.js';
import Movieview from 'components/movieview.js';
import RecordList from "views/RecordList.js";
import { BrowserRouter } from "react-router-dom";
import { Switch } from "@material-ui/core";

import { createLogicalNot } from "typescript";


export default class Inserts extends Component {


    constructor(props)
    {
        super(props);

       

    }
    render() { 
        return (


         <div>
      
<Movieview/>

         </div>









            

           
            


          
        )
    }
        
}