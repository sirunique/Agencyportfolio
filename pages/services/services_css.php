<style>
  .section:not(:nth-of-type(6)) {
    display: grid;
    grid-template-rows: auto auto;
    align-items: center;
    justify-content: center;
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

  .section-padding {
    padding-bottom: 35px;
  }

  .img1 {
    padding: 0 20px 20px 20px;
  }

  .branding {
    font-size: 30px;
    margin: 20px;
  }

  .space-between {
    display: flex;
    justify-content: space-between;
  }

  .services-lists {
    display: grid;
    grid-template-columns: 1fr;
    gap: 0.8rem;
  }

  .inquire:hover {
    color: gray;
    font-size: 18px;
    transition: all 1s ease-in-out;
  }

  .projectBtn-section {
    padding: 10px 20px;
  }

  .services--7 {
    display: grid;
    grid-template-columns: repeat(3, auto);
    gap: 1rem;
    padding: 1rem;
  }

  .section_2-img {
    padding: 20px;
  }

  .section_2-img:last-of-type {
    padding: 40px;
  }


  /* Desktop and tablet view */
  @media only screen and (min-width: 780px) {

    .section:not(:last-of-type) {
      padding: 40px 0 20px 80px;
      gap: 2vw;
    }

    .section:nth-of-type(5) {
      grid-template-columns: auto auto;
      padding-left: 10vw;
    }

    .element-align {
      align-items: left;
      justify-content: center;
      gap: 2vw;
      width: 80%;
      padding: 0;
    }

    .services-lists:not(.straight) {
      grid-template-columns: repeat(2, 1fr);
    }

    .services {
      display: grid;
      grid-template-columns: 1fr 1fr;
    }

    .section-padding {
      padding-bottom: 0;
    }

    .services_grid1 {
      order: 2;
    }

    .services_grid2 {
      order: 1;
    }

    .img2,
    .img3,
    .img4,
    .img5 {
      height: 90%;
      width: 25vw;
    }

    .img1 {
      padding: 0;
    }

    .branding,
    .projectBtn-section {
      display: none;
    }

    .btn {
      align-items: center;
      text-transform: uppercase;
      background-color: transparent;
      border: 2px solid gray;
      padding: 20px 40px;
      transition: color 0.3s ease, transform 0.3s ease;
      cursor: pointer;
    }

    .btn:hover {
      color: gray;
      transform: scale(1.05);
    }

    .services--7 {
      grid-template-columns: repeat(3, 1fr);
      padding: 7vw 15vw;
      gap: 2rem;
    }

  }

  /* Desktop and tablet view */
</style>