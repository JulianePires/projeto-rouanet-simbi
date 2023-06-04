import {RouanetProjectType} from 'commons:/utils/types'
import {api} from 'infraestructure/api'
import {ReactNode, createContext, useContext, useState} from 'react'

interface RouanetProjectsProviderProps {
  children: ReactNode
}

interface RouanetProjectContextProps {
  projects: RouanetProjectType[]
  handleSearchProjects: () => void
  pagination: {
    startIndex: number
    endIndex: number
  }
  handleChangePagination: (pageNumber: number) => void
}

const RouanetProjectContext = createContext({} as RouanetProjectContextProps)

export const RouanetProjectsProvider: React.FC<
  RouanetProjectsProviderProps
> = ({children}) => {
  const [projects, setProjects] = useState<RouanetProjectType[]>([])
  const [pagination, setPagination] = useState({
    startIndex: 0,
    endIndex: 9,
  })

  function handleSearchProjects() {
    api
      .get('/projects')
      .then(({data}) => setProjects(data['\u0000*\u0000items']))
  }

  function handleChangePagination(pageNumber: number) {
    setPagination({
      startIndex: pageNumber,
      endIndex: pageNumber + 9,
    })
  }

  return (
    <RouanetProjectContext.Provider
      value={{
        projects,
        handleSearchProjects,
        pagination,
        handleChangePagination,
      }}>
      {children}
    </RouanetProjectContext.Provider>
  )
}

const useRouanetProject = () => {
  return useContext(RouanetProjectContext)
}

export default useRouanetProject
