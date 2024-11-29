<style>
    .contact {
        display: grid;
        grid-template-columns: 1fr;
    }

    .contact--2 {
        display: none;
    }

    .grid-img {
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
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

    .contact--3 {
        display: grid;
        grid-template-columns: repeat(3, auto);
        gap: 1rem;
        padding: 1rem;
    }

    /* Desktop and tablet view */
    @media only screen and (min-width: 768px) {
        .contact {
            grid-template-columns: 1fr 1fr;
            column-gap: 10rem;
            row-gap: 0;
        }

        .contact--1 img {
            display: block;
        }

        .contact--2 {
            display: flex;
            flex-direction: row;
            align-items: center;
            height: auto;
            padding: 2rem;
            gap: 3rem;
        }

        .img2 {
            width: 30%;
            height: auto;
            max-width: 400px;
            object-fit: cover;
        }

        .element-align:nth-of-type(2) {
            width: 70%;
        }

        .contact--3 {
            grid-template-columns: repeat(3, auto);
            padding: 7vw 15vw;
            gap: 2rem;
        }

    }

    /* Desktop and tablet view */
</style>