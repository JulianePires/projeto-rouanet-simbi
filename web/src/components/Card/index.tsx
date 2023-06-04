import {memo} from 'react'
import {
  Button,
  CardActions,
  CardContent,
  Chip,
  IconButton,
  Card as MaterialCard,
  Stack,
  Typography,
} from '@mui/material'
import colors from 'commons/constants/colors'
import {FavoriteBorderOutlined} from '@mui/icons-material'

interface Props {
  tag: string
  projectName: string
  city: string
  state: string
  summary: string
  amountApproved: string
  amountRaised: string
}

const Card: React.FC<Props> = ({
  projectName,
  tag,
  city,
  state,
  summary,
  amountApproved,
  amountRaised,
}) => {
  return (
    <MaterialCard sx={{width: '20rem'}}>
      <CardContent
        sx={{display: 'flex', flexDirection: 'column', gap: '0.2rem'}}>
        <Chip
          sx={{
            background: colors.lightAmber,
            color: colors.darkAmber,
            fontWeight: '500',
            fontSize: '12px',
            borderRadius: '4px',
            width: 'fit-content',
          }}
          size="small"
          label={tag.toUpperCase()}
        />
        <Typography sx={{fontSize: 14, fontWeight: 600}} gutterBottom>
          {projectName}
        </Typography>
        <Typography
          variant="caption"
          sx={{fontSize: 12, color: colors.gray, fontWeight: 400}}
          gutterBottom>
          {city} • {state}
        </Typography>
        <Typography
          sx={{
            fontSize: 12,
            fontWeight: 300,
            color: colors.darkGray,
            maxWidth: '100%',
            maxHeight: '7.2ch',
            overflow: 'hidden',
            textOverflow: 'ellipsis',
            marginBottom: '1rem',
          }}
          variant="body2"
          gutterBottom>
          {summary}
        </Typography>
        <Stack
          direction="row"
          alignItems="center"
          justifyContent="space-between"
          width="70%">
          <Typography sx={{fontSize: '14px'}} gutterBottom>
            Aprovado
          </Typography>
          <Typography sx={{fontSize: '14px', fontWeight: 800}}>
            {amountApproved}
          </Typography>
        </Stack>
        <Stack
          direction="row"
          alignItems="center"
          justifyContent="space-between"
          width="70%">
          <Typography sx={{fontSize: '14px'}}>Captado</Typography>
          <Typography sx={{fontSize: '14px', fontWeight: 800}}>
            {amountRaised}
          </Typography>
        </Stack>
      </CardContent>
      <CardActions>
        <Stack
          direction="row"
          alignItems="center"
          justifyContent="space-between"
          width="100%">
          <Button fullWidth variant="contained" size="medium" disabled>
            Adicionar
          </Button>
          <IconButton>
            <FavoriteBorderOutlined />
          </IconButton>
        </Stack>
      </CardActions>
    </MaterialCard>
  )
}

export default memo(Card)
