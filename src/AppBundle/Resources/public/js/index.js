import React from 'react';
import ReactDOM from 'react-dom';

require('../css/index.css');

import UserApp from './components/UserApp';

ReactDOM.render(
    <UserApp />,
    document.getElementById('app')
);
