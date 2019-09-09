import React, {Component} from 'react';
import './App.css';
import Header from './Header/Header';
import Main from './Main/Main';
import Footer from './Footer/Footer';


const App = () => {
  const now = new Date();
  const a = 10;
  const b = 20;

  const elain = "Hippo";
  const nimi = "Potamus";

  return (
    <div className='app'>
      <div>
        <p>Päivämäärä on: {now.toString()}</p>
        <p>{a} + {b} =  { a + b }</p>
        <h2>{ elain  + nimi }</h2>
      </div>
      <Header
        title='This is Header component'
        text='This is some text in Header component'
      />
      <Main
        title='This is Main component'
        text='This is some text in Main component passed via props'
      />
      <Footer
        title='This is Footer component'
      />
    </div>
  );
}

export default App;