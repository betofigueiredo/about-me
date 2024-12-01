import { useEffect, useRef, useState } from "react";
import anime from "animejs/lib/anime.es.js";
import img3d from "./assets/370220.jpg";

type Piece = {
  key: string;
  backgroundImage: string;
  className: string;
  width: string;
  height: string;
  backgroundSize: string;
  backgroundPosition: string;
  dataset?: {
    row: number;
    column: number;
    delay: number;
  };
};

const constants = {
  VIDEO_WIDTH: 980,
  VIDEO_HEIGHT: 551,
  ROWS: 14,
  COLUMNS: 12,
  DELAY: [0, 40],
};

function Anim() {
  const el = useRef<HTMLDivElement>(null);
  // const [dimensions, setDimensions] = useState({
  //   width: el.current ? el.current.offsetWidth : 922,
  //   height: el.current ? el.current.offsetHeight : 1213,
  // });
  const [pieces, setPieces] = useState<Piece[]>([]);
  const [imgSrc, setImgSrc] = useState("");

  const setImage = (newImgSrc: string) => {
    setImgSrc(newImgSrc);
    setPieces(
      pieces.map((piece) => {
        return {
          ...piece,
          backgroundImage: `url(${newImgSrc})`,
        };
      })
    );
  };

  useEffect(() => {
    const createPiece = (row: number, column: number): Piece => {
      const width = constants.VIDEO_WIDTH / constants.COLUMNS;
      const height = constants.VIDEO_HEIGHT / constants.ROWS;

      return {
        key: crypto.randomUUID(),
        backgroundImage: `url(${img3d})`,
        className: "piece",
        width: `${width}px`,
        height: `${height}px`,
        backgroundSize: `${width * constants.COLUMNS + 4}px auto`,
        backgroundPosition: `${-1 * column * 100}% ${-1 * 100 * row}%`,
        dataset: { row, column, delay: anime.random(0, 20) },
      };
    };

    const newPieces = [];

    for (let r = 0; r < constants.ROWS; r++) {
      for (let c = 0; c < constants.COLUMNS; c++) {
        const piece = createPiece(r, c);
        newPieces.push(piece);
      }
    }

    setPieces(newPieces);
  }, []);

  const openImage = () => {
    // setImage(img3d);
    // if (isAnimating) {
    //   return false;
    // }

    // isAnimating = true;
    // current = pos;
    // menuItems[current].classList.add("menu__item--current");
    // const imgsrc = item.dataset.image;

    // anime.remove(".piece");
    anime({
      targets: ".piece",
      duration: 300,
      easing: "easeOutQuad",
      delay: (element: HTMLElement) =>
        parseInt(element.dataset.row || "0") *
        parseInt(element.dataset.delay || "0"),
      translateX: () => anime.random(-850, -400) + "px",
      translateY: () => anime.random(-200, -100) + "px",
      rotateZ: () => anime.random(-45, 45) + "deg",
      opacity: 0,
      complete: () => {
        // isAnimating = false;
      },
    });
  };

  return (
    <div className="w-[100%] h-[800px] flex">
      <button onClick={() => openImage()} className="text-white">
        Open
      </button>
      <div
        ref={el}
        style={{
          width: constants.VIDEO_WIDTH,
          height: constants.VIDEO_HEIGHT,
          display: "flex",
          flexDirection: "row",
          flexWrap: "wrap",
        }}
      >
        {pieces.map((piece) => (
          <div
            key={piece.key}
            className="piece"
            data-row={piece.dataset?.row}
            data-column={piece.dataset?.column}
            data-delay={piece.dataset?.delay}
            style={{
              width: piece.width,
              height: piece.height,
              backgroundImage: piece.backgroundImage,
              backgroundSize: piece.backgroundSize,
              backgroundPosition: piece.backgroundPosition,
            }}
          />
        ))}
      </div>
    </div>
  );
}

export default Anim;
