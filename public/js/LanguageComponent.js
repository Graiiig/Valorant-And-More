'use strict';

const e = React.createElement;

class Languages extends React.Component {
  constructor(props) {
    super(props);
    this.state = { language: "EN" };
  }

  render() {
    if (this.state.liked) {
      return 'You liked this.';
    }

    return <p>US</p>
    
  }
}

const domContainer = document.querySelector('#languageblock');
ReactDOM.render(e(Languages), domContainer);