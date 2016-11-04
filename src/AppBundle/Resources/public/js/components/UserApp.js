import React from 'react';
import axios from 'axios';

export default class UserApp extends React.Component {
    constructor(props) {
        super(props);

        this.state = {
            users: [],
            loading: true,
            error: null
        };
    }

    componentDidMount() {
        axios.get(`/users`).then(
            res => {
                const users = res.data;
                this.setState({
                    users,
                    loading: false,
                    error: null
                });
            }
        ).catch(err => {
            this.setState({
                loading: false,
                error: err
            });
        });
    }

    static renderLoading() {
        return <div>Loading...</div>;
    }

    renderError() {
        return (
            <div>
                Uh oh: {this.state.error.message}
            </div>
        );
    }

    renderUsers() {
        if (this.state.error) return this.renderError();
        else return <div>
            <section className="user-app">
                <section className="main">
                    <ol className="user-list">
                        {
                            this.state.users.map(user => <li key={user.id}>{user.firstname}</li>)
                        }
                    </ol>
                </section>
            </section>
        </div>
    }

    render() {
        if (this.state.loading) return UserApp.renderLoading();
        else return this.renderUsers();
    }
};
