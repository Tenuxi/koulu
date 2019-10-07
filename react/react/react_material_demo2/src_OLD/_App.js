import React from 'react';
import {BrowserRouter as Router, Switch, Route, Link } from "react-router-dom";
import './App.css';
const Home = () => {
 return (
   <div>
     <h1>This is HOME page</h1>
   </div>
 );
}
const About = () => {
 return (
   <div>
     <h1>This is ABOUT page</h1>
   </div>
 );
}
const Projects = () => {
 return (
   <div>
     <h1>This is PROJECTS page</h1>
   </div>
 );
}
const Nav = () => {
 return (
   <div>
     <nav>
       <ul>
         <li><Link to="/">Home</Link></li>
         <li><Link to="/about">About</Link></li>
         <li><Link to="/projects">Projects</Link></li>
       </ul>
     </nav>
   </div>
 );
}
const App = () => {
 return (
   <div>
     <Router>
       <Nav />
       <Switch>
         <Route exact path="/" component={Home} />
         <Route path="/about" component={About} />
         <Route path="/projects" component={Projects} />
       </Switch>
     </Router>
   </div>
 );
}
export default App;