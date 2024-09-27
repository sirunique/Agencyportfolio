<style>
    .section {
        display: grid;
        grid-template-columns: 1fr;
    }

    .row:not(:last-child) {
        border-bottom: 2px solid grey;
    }

    .element-align {
        display: flex;
        flex-direction: column;
        justify-content: left;
        gap: 1.5rem;
        padding: 25px;
    }

    .grid-img {
        flex: 1;
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    .contact--1 img,
    .contact--2 {
        display: none;
    }

    .contact--3 {
        display: grid;
        grid-template-columns: repeat(3, auto);
        gap: 1rem;
        padding: 1rem;
    }

    /* Desktop and tablet view */
    @media only screen and (min-width: 780px) {

        .section {
            grid-template-columns: 1fr 1fr;
        }

        .contact {
            justify-content: space-between;
        }

        .element-align {
            align-items: left;
            justify-content: center;
            gap: 2vw;
            width: 80%;
            padding: 0;
        }

        .img5 {
            height: 90%;
            width: 25vw;
        }


        .contact--1 img,
        .contact--2 {
            display: grid;
        }

        .contact--3 {
            grid-template-columns: repeat(3, auto);
            padding: 7vw 15vw;
            gap: 2rem;
        }

    }

    /* Desktop and tablet view */
</style>