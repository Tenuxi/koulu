import React, {Component} from 'react';
import './Main.css';
import Box from '../Box/Box';


class Main extends Component{
  state = {
    persons:[
      {name: "Jaska", title: "Johtaja", age: 70},
      {name: "Jiska", title: "Duunari", age: 50},
      {name: "Joska", title: "Mainostaja", age: 30},
    ]
  }

  clickHandelr = () => {
    this.setState({
      persons:[
      {name: "Olli", title: "Johtaja", age: 15},
      {name: "Pekka", title: "Duunari", age: 40},
      {name: "Jonne", title: "Mainostaja", age: 60},
      ]
    })
    console.log('testi');
  }

  render () {

    return (
      <div className='main'>
          
        <button className='mainButton' onClick={this.clickHandelr}>Click Me!</button>
  
        <div class="boxit">
            <Box name={this.state.persons[0].name} title={this.state.persons[0].title} age={this.state.persons[0].age} />
            <Box name={this.state.persons[1].name} title={this.state.persons[1].title} age={this.state.persons[1].age} />
            <Box name={this.state.persons[2].name} title={this.state.persons[2].title} age={this.state.persons[2].age} />
        </div>
      </div>
    );

    }
}




export default Main;