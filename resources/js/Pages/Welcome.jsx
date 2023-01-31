import React from "react";

export default function Welcome({ user }) {
    return (
        <div>
            <h1>Welcome</h1>
            <p>Hello {user.name}, welcome to Inertia </p>
        </div>
    );
}
