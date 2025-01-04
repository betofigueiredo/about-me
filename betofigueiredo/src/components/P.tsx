import { FC } from "react";

type Props = { children: React.ReactNode };

const P: FC<Props> = ({ children }) => {
  return (
    <p className="text-lg mb-7 leading-8 text-[#212830] font-serif">
      {children}
    </p>
  );
};

export default P;
