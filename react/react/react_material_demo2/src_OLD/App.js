import React from 'react';
import './App.css';


import AppBar from '@material-ui/core/AppBar';
import Typography from '@material-ui/core/Typography';
import { Toolbar } from '@material-ui/core';

import {BrowserRouter as Router, Switch, Route, Link } from "react-router-dom";


import MainNavigation from './MainNavigation/MainNavigation';
import Posts from './Post/Posts';
import Footer from './Footer/Footer';
import Contact from './Contact/Contact';
import OnePost from './OnePost/OnePost';


import { makeStyles } from '@material-ui/styles';



const useStyles = makeStyles({
  root: {
    padding:25,
    background: "#131313",
    flexGrow: 1,
  },
  list: {
    bacground:"green"
  },
  title: {
    flexGrow: 1,
  }
});


const App = () => {
  const classes = useStyles();
  return (
    <div>
        <Router>
          <AppBar className={classes.root}>
            <Toolbar>
              <Typography variant="h5" className={classes.title}>
                Material-UI DEMO
              </Typography>

              <MainNavigation />

            </Toolbar>
          </AppBar>
          <Switch>
              <Route exact path="/" component={Posts}/>
              <Route path="/contact" component={Contact}/>
              {/* <Route path={`/:postId`} render={ (props) => <Post data={postsdata} {...props} /> } /> */}
          </Switch>
        

        <Footer> 
      
        
        </Footer>

        </Router>

    </div>
  );
}



export default App;
