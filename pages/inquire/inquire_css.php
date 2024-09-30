<style>
    .section {
        padding: 0;
    }

    .contact {
        display: grid;
        grid-template-columns: 1fr;
    }

    .contact:not(:nth-of-type(2)) {
        display: none;
    }

    .contact--1 img {
        display: none;
    }

    span {
        font-size: 1rem;
    }

    a {
        font-size: .8rem;
    }

    /* Form */
    input,
    textarea,
    select {
        width: 100%;
        padding: 8px;
        margin: 2px 0 20px 0;
        border: 1px solid black;
        border-radius: 4px;
        background-color: transparent;
    }

    textarea {
        height: 100px;
        resize: none;
    }

    button {
        width: 100%;
        background-color: transparent;
        border: none;
        cursor: pointer;
    }

    button:hover {
        color: gray
    }

    /* Form */

    .row:not(:last-child) {
        border-bottom: 2px solid grey;
    }

    .grid-img {
        flex: 1;
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    .contact--3 {
        display: grid;
        grid-template-columns: repeat(3, auto);
        gap: 1rem;
        padding: 1rem;
    }

    /* Desktop and tablet view */
    @media only screen and (min-width: 780px) {
        .contact {
            grid-template-columns: 1fr 1fr;
            justify-content: center;
            align-items: center;
            gap: 5rem;
        }

        .contact--1 img {
            display: block;
        }

        .element-align {
            justify-content: center;
            gap: 2vw;
            width: 80%;
        }

        .text-img {
            height: 50%;
            width: 50%;
            object-fit: cover;
            display: block;
        }

        .contact:not(:nth-of-type(2)) {
            display: flex;

        }

        .contact--3 {
            grid-template-columns: repeat(3, auto);
            padding: 7vw 15vw;
            gap: 2rem;
        }

    }

    /* Desktop and tablet view */
</style>