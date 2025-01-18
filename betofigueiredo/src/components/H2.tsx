import { FC } from "react";

type Props = { children: React.ReactNode };

const H2: FC<Props> = ({ children }) => {
  return (
    <h2 className="text-3xl mt-16 mb-8 font-bold text-[#212830] font-display">
      {children}
    </h2>
  );
};

export default H2;
