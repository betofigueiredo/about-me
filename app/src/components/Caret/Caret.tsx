import { ReactElement } from "react";
import { FontAwesomeIcon } from "@fortawesome/react-fontawesome";
import { faAngleRight } from "@fortawesome/free-solid-svg-icons";

const Caret = (): ReactElement => {
  return <FontAwesomeIcon icon={faAngleRight} className="text-pink-600 mr-2" />;
};

export default Caret;
