import React from "react"

const SectionBody = () => {

  const number = 100;

  return (
    <React.Fragment>
      {
        React.Children.toArray(
          [...Array(number)].map((_, i) => (
            <SectionItem item={i} />
          ))
        )
      }
    </React.Fragment>
  )
}


export const SectionItem = ({item}) => {
  return (
    <div className='py-5 bg-cyan-700 my-2'>
      <h1 className='text-2xl font-mono uppercase text-center font-bold text-white'>
        Section Item {item}
      </h1>
    </div>
  )
}

export default SectionBody