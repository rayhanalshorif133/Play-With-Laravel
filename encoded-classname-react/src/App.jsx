import tw from "tailwind-styled-components"
import classnames from "classnames"

const Container = tw.div`
    flex
    items-center
    justify-center
    flex-col
    w-full
    bg-indigo-600
    min-h-screen
`

const putClass = ['text-center', 'text-2xl', 'font-bold', 'text-white', 'mb-4'];


export default function App() {
  return (
    <Container>
      <div className={`${classnames(putClass)} text-white`}>Use the Container as any other React Component</div>
    </Container>
  )
}