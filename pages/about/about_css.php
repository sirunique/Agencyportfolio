<style>
    .section {
        display: grid;
        grid-template-rows: auto auto;
        align-items: center;
        justify-content: center;
    }

    h1 {
        font-size: 6vw;
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

    .about--2 {
        display: grid;
        grid-template-columns: repeat(3, auto);
        gap: 1rem;
        padding: 1rem;
    }

    span {
        display: none;
    }


    /* Desktop and tablet view */
    @media only screen and (min-width: 780px) {
        .section {
            padding: 0;
            gap: 0 10vw;
        }

        .element-align {
            align-items: left;
            justify-content: center;
            gap: 2vw;
            width: 80%;
            padding: 0;
        }

        h1 {
            font-size: 3vw;
        }

        .about {
            display: grid;
            grid-template-columns: 1fr 1fr;
        }

        .about--2 {
            grid-template-columns: repeat(3, 1fr);
            padding: 2vw 15vw 7vw 15vw;
            gap: 2rem;
        }

        span {
            display: block;
            font-size: 10px;
            padding: 5vw 0 0 15vw;
        }

    }

    /* Desktop and tablet view */
</style>