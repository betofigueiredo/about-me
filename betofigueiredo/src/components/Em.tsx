import { FC } from "react";

type Props = { children: React.ReactNode };

const Em: FC<Props> = ({ children }) => {
  return (
    <>
      <div className="my-12 text-center">
        <em className="relative text-xl leading-7 text-[#212830] font-serif">
          {children}
          <div className="absolute top-5 left-0 w-full h-2 bg-[#ffffa8] -z-10" />
        </em>
      </div>
      <div className="mx-auto w-44 h-[1px] mt-16 mb-16 bg-[#C5C5C5]" />
    </>
  );
};

export default Em;
