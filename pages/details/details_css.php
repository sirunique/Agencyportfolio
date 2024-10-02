<style>
    .flex {
        display: flex;
        flex-direction: column;
    }

    .details {
        justify-content: center;
        align-items: center;
        gap: 5rem;
        padding: 5rem 1rem;
    }

    .text-container {
        display: grid;
        grid-template-columns: 1fr;
        gap: 5rem;
        width: 90%;
    }

    h1 {
        text-transform: uppercase;
        font-size: 30px;
        letter-spacing: 4px;
        margin-bottom: 20px;
    }

    span {
        font-size: 1.5vh;
    }

    .img-container {
        gap: 2vw;
    }

    .split-img {
        display: grid;
        grid-template-columns: 1fr 1fr;
        gap: 2vw;
    }

    .grid-img {
        flex: 1;
        width: 100%;
        height: 100%;
        object-fit: cover;
        display: block;
    }

    .back {
        margin-top: 3vw;
    }

    /* Desktop */
    @media only screen and (min-width: 780px) {
        .details {
            padding: 17vw 17vw 5vw 17vw;
        }

        .text-container {
            grid-template-columns: 1fr 1fr;
            width: 100%;
            justify-content: space-between;
            align-items: center;
        }

        .img-container {
            padding: 5vw 8vw 0 8vw;
        }
    }

    /* Desktop */
</style>